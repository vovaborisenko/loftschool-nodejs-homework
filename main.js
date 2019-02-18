const fs = require('fs');
const path = require('path');
const args = process.argv.slice(2);
/** путь папки, где лежат файлы */
const pathBaseDir = args[0] || path.join(__dirname, 'green.2');
/** путь папки, где будут лежать файлы */
const pathCollectionDir = args[1] || path.join(__dirname, 'green-collection');
/** удалять ли исходную папку */
const deleteSrc = args[2] === 'true';
/** перемещает файлы */
const moveFile = (from, to) => {
  if (!fs.existsSync(to)) {
    fs.linkSync(from, to);
  }
  if (deleteSrc) {
    fs.unlinkSync(from);
  }
};
/** читает папку */
const readDir = (pathDir) => {
  /** все файлы и папки читаемой папки */
  let files = fs.readdirSync(pathDir);

  files.forEach(file => {
    /** путь рассматриваемого файла\папки */
    let pathCurrent = path.join(pathDir, file);
    /** данные о рассматриваемом файле\папке */
    let state = fs.statSync(pathCurrent);

    if (state.isFile()) {
      /** путь создаваемой папки по первой букве имени */
      let dirName = path.join(pathCollectionDir, file[0].toUpperCase());
      /** путь копируемого файла по первой букве имени */
      let fileName = path.join(pathCollectionDir, file[0].toUpperCase(), file);

      if (!fs.existsSync(dirName)) {
        fs.mkdirSync(dirName);
      }
      moveFile(pathCurrent, fileName);
    } else {
      readDir(pathCurrent);
    }
  });
  if (deleteSrc) {
    removeDir(pathDir);
  }
};

/** удаляет папку */
const removeDir = (path) => {
  fs.rmdirSync(path);
};

let isExistsCollectionDir = fs.existsSync(pathCollectionDir);

if (!isExistsCollectionDir) {
  fs.mkdirSync(pathCollectionDir);
}

readDir(pathBaseDir);
if (deleteSrc) {
  console.log(`Перемещение выполено из папки:\n\t ${pathBaseDir}\nв папку:\n\t ${pathCollectionDir}\nИсходная папка удалена`);
} else {
  console.log(`Копирование выполено из папки:\n\t ${pathBaseDir}\nв папку:\n\t ${pathCollectionDir}`);
}
