const { upperCase } = require('lodash');

require('./bootstrap');

require('alpinejs');

function setupInputImage() {
    var imgInput = document.getElementById('img-input');
    var imgFilename = document.getElementById('img-filename');
    var imgPath = document.getElementById('img-path');
    var imgPreview = document.getElementById('img-preview');
    var imgTitle = document.getElementById('img-title');
    var imgTitleSelected = document.getElementById('img-title-selected');

    imgInput.addEventListener('change',()=>{
        imgTitle.innerText = imgTitleSelected.innerText;
        imgPath.innerText = imgInput.files[0].name;
        imgFilename.setAttribute('value',imgInput.files[0].name) ;
        var filePath = URL.createObjectURL(imgInput.files[0]);
        imgPreview.setAttribute('src',filePath);
    });

}

document.addEventListener('onload', setupInputImage() );

