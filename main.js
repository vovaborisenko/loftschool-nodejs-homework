const fs = require('fs'),
    path = require('path');
    args = process.argv.slice(2);
/** путь папки, где лежат файлы */
const pathBaseDir = args[0] || path.join(__dirname, 'green.2');
/** путь папки, где будут лежать файлы */
const pathCollectionDir = args[1] || path.join(__dirname, 'green-collection');
/** удалять ли исходную папку */
const deleteSrc = args[2] ? true : false;
/** перемещает файлы*/
const moveFile = (from, to) => {
    fs.link(from, to, () => {
        fs.unlink(from, err => {
            outError(err);            
        })
    });
}
/** читает папку */
const readDir = (pathDir) => {
    fs.readdir(pathDir, (err, files) => {
        outError(err);
        files.forEach(file => {
            /** путь рассматриваемого файла\папки */
            let pathCurrent = path.join(pathDir, file);
    
            fs.stat(pathCurrent, (err, stats) => {
                outError(err);
                if (stats.isFile()) {
                    /** путь создаваемой папки по первой букве имени */
                    let dirName = path.join(pathCollectionDir,file[0]);
                    /** путь копируемого файла по первой букве имени */
                    let fileName = path.join(pathCollectionDir,file[0],file);

                    fs.exists(dirName, (exists) => {
                        if (!exists) {
                            fs.mkdir(dirName, () => {
                                moveFile(pathCurrent, fileName);
                            })
                        } else {
                            moveFile(pathCurrent, fileName);
                        };
                    })                
                } else {
                    readDir(pathCurrent);
                }
            })
        });
    })
}

/** выводит сообщение об ошибке */
const outError = (err) => {
    if (err) {
        console.log(err.message);
    }
}
/** удаляет папку */
const removeDir = (path) => {
    fs.rmdir(path, err =>{
        outError(err);
    })
}
/** запускает перемещение файлов и удаление папок */
fs.exists(pathCollectionDir, exists => {
    if (!exists) {
        fs.mkdir(pathCollectionDir, err => {
            outError(err);
            readDir(pathBaseDir);    
        })
    } else readDir(pathBaseDir);    
})