const { upperCase, isEmpty, isNull, isUndefined } = require('lodash');

require('./bootstrap');

require('alpinejs');

function setupInputImage() {
    let imgInput = document.getElementById('img-input') ;
    if(!imgInput){
        return;
    }
    let imgFilename = document.getElementById('img-filename');
    let imgPath = document.getElementById('img-path');
    let imgPreview = document.getElementById('img-preview');
    let imgTitle = document.getElementById('img-title');
    let imgTitleSelected = document.getElementById('img-title-selected');

    imgInput.addEventListener('change',()=>{
        imgTitle.innerText = imgTitleSelected.innerText;
        imgPath.innerText = imgInput.files[0].name;
        imgFilename.setAttribute('value',imgInput.files[0].name) ;
        let filePath = URL.createObjectURL(imgInput.files[0]);
        imgPreview.setAttribute('src',filePath);
    });


}



window.addEventListener('load', ()=>{

    setupInputImage();

},false);

