const fs = require('mz/fs');
const path = require('path');
const args = process.argv.slice(2);
/** путь папки, где лежат файлы */
const pathBaseDir = args[0] || path.join(__dirname, 'green.2');
/** путь папки, где будут лежать файлы */
const pathCollectionDir = args[1] || path.join(__dirname, 'green-collection');
/** удалять ли исходную папку */
const deleteSrc = args[2];
/** читает папку */
const readDir = (pathDir) => {
  let arrFiles = [];
  let arrPathFiles = [];
  return fs.readdir(pathDir)
    .then((files) => { // вернет все пути папок и файлов
      arrFiles = files;
      arrPathFiles = files.map((file) => path.join(pathDir, file));
      return arrPathFiles;
    })
    .then((stats) => { // вернет статистику для каждой папки и файла
      let arr = stats.map((stat) => fs.stat(stat));
      return Promise.all(arr);
    })
    .then((data) => {
      let arr = data.map((elem, index) => {
        if (elem.isFile()) {
          let dirName = path.join(pathCollectionDir, arrFiles[index][0].toUpperCase());
          return fs.exists(dirName);
        } else {
          return readDir(arrPathFiles[index]);
        }
      });
      return Promise.all(arr);
    })
    .then((data) => {
      let arr = data.map((elem, index) => {
        let dirName = path.join(pathCollectionDir, arrFiles[index][0].toUpperCase());
        if (!elem) {
          return fs.mkdir(dirName);
        }
      });
      return Promise.all(arr);
    })
    .then((data) => {
      let arr = data.map((elem, index) => {
        let fileName = path.join(pathCollectionDir, arrFiles[index][0].toUpperCase(), arrFiles[index]);
        return fs.exists(fileName);
      });
      return Promise.all(arr);
    })
    .then((data) => {
      let arr = data.map((elem, index) => {
        let fileName = path.join(pathCollectionDir, arrFiles[index][0].toUpperCase(), arrFiles[index]);
        if (!elem) {
          return fs.link(arrPathFiles[index], fileName);
        } else {
          return fs.unlink(arrPathFiles[index]);
        }
      });
      return Promise.all(arr);
    })
    .then((data) => {
      let arr = data.map((elem, index) => {
        return fs.unlink(arrPathFiles[index]);
      });
      return Promise.all(arr);
    })
    .then((data) => {
      let arr = data.map((elem, index) => {
        return fs.rmdir(arrPathFiles[index]);
      });
      return Promise.all(arr);
    });
};

fs.exists(pathCollectionDir)
  .then((exists) => {
    if (!exists) {
      return fs.mkdir(pathCollectionDir);
    }
  })
  .then(() => readDir(pathBaseDir))
  .then(() => {
    if (deleteSrc) {
      console.log(`Перемещение выполено из папки:\n\t ${pathBaseDir}\nв папку:\n\t ${pathCollectionDir}\nИсходная папка удалена`);
    } else {
      console.log(`Перемещение выполено из папки:\n\t ${pathBaseDir}\nв папку:\n\t ${pathCollectionDir}`);
    }
  });
