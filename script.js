const showHiddenInput = (inputOverLay,inputPass,inputIcon)=>{
    const overlay = document.getElementById(inputOverLay),
          inputBx = document.getElementById(inputPass,),
          iconEye = document.getElementById(inputIcon)

       iconEye.addEventListener('click',() =>{
        //change password to text
          if(inputBx.type === 'password'){
            inputBx.type = 'text'
            //change icon
            iconEye.classList.add('bxs-show')
          }else{
            inputBx.type ='password'
            iconEye.classList.remove('bxs-show')

            
          }

          overlay.classList.toggle('overlay-content')
       })   

}
 
showHiddenInput('input-overlay','input-pass','input-icon')