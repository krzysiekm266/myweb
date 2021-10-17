const { upperCase } = require('lodash');

require('./bootstrap');

require('alpinejs');

function setupInputImage() {
    var imgInput = document.getElementById('add-image');
    var imgPath = document.getElementById('img-path');
    var imgPreview = document.getElementById('img-preview');
    var imgTitle = document.getElementById('img-title');

    imgInput.addEventListener('change',()=>{
        imgTitle.innerText.replace(upperCase('Add image...'),'Selected file: ');
        imgPath.innerText = imgInput.files[0].name;
        var filePath = URL.createObjectURL(imgInput.files[0]);
        imgPreview.setAttribute('src',filePath);

    });

}
document.addEventListener('onload', setupInputImage() );

