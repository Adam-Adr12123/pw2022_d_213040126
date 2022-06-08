function previewImage(){
    
    const foto_profil = document.querySelector('#foto_profil');
    const imgPreview = document.querySelector('#img-preview');
    imgPreview.style.display='block';
    var oFReader = new FileReader();
    oFReader.readAsDataURL(foto_profil.files[0]);

    oFReader.onload=function(oFREvent){
        imgPreview.src= oFREvent.target.result;
    };
    
    
}