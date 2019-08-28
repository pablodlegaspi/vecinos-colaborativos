var theForm = document.querySelector('form');

var passwordInput = document.querySelector('[name=password]');

var inputs = Array.from(theForm.elements);

inputs.pop();

var regexEmail = /\S+@\S+\.\S+/;

var regexSpace = /[\s]/;

var regexDH = /DH/;

var errors = {};


inputs.forEach(function (input) {

  var errorDiv = null;

  errorDiv = input.nextElementSibling;

  input.addEventListener('blur', function() {

    var inputValue = input.value.trim();

    if (inputValue == '') {

      this.style.border = 'solid red 1px';
      this.style.color = 'red';
      errorDiv.style.display = 'block';
      errorDiv.innerText = 'El campo es obligatorio';

      errors[this.name] = true;

    } else {

      this.style.border = 'solid black 1px';
      this.style.color = 'rgb(66, 66, 66)';
      errorDiv.style.display = 'none';
      errorDiv.innerText = '';

      delete errors[this.name];

      if (this.name === 'email') {

        if (!regexEmail.test(inputValue)) {

          this.style.border = 'solid red 1px';
          this.style.color = 'red';
          errorDiv.style.display = 'block';
          errorDiv.innerText = 'Ingresá un formato de emal válido';

          errors[this.name] = true;

        } else {

          this.style.border = 'solid black 1px';
          this.style.color = 'rgb(66, 66, 66)';
          errorDiv.style.display = 'none';
          errorDiv.innerText = '';

          delete errors[this.name];

        }

      }

      if (this.name == 'password') {

        if (inputValue.length < 5) {

          this.style.border = 'solid red 1px';
          this.style.color = 'red';
          errorDiv.style.display = 'block';
          errorDiv.innerText = 'La contraseña debe tener al menos 5 caracteres';

          errors[this.name] = true;

        } else if (inputValue.indexOf('DH') < 0) {

          this.style.border = 'solid red 1px';
          this.style.color = 'red';
          errorDiv.style.display = 'block';
          errorDiv.innerText = 'La contraseña debe incluir las letras "DH"';

          errors[this.name] = true;

         } else if (regexSpace.test(inputValue)) {

          this.style.border = 'solid red 1px';
          this.style.color = 'red';
          errorDiv.style.display = 'block';
          errorDiv.innerText = 'La contraseña no puede tener espacios';

          errors[this.name] = true;

        } else {

          this.style.border = 'solid black 1px';
          this.style.color = 'rgb(66, 66, 66)';
          errorDiv.style.display = 'none';
          errorDiv.innerText = '';

          delete errors[this.name];

        }
      }

      if (this.name == 'password_confirmation') {

        if (this.value != passwordInput.value) {

          this.style.border = 'solid red 1px';
          this.style.color = 'red';
          errorDiv.style.display = 'block';
          errorDiv.innerText = 'Las contraseñas no coinciden';

          errors[this.name] = true;

        }
      }
    }

    console.log(errors);

  });

  if (input.name === 'avatar') {

    input.addEventListener('change', function() {

      // var fileName = this.value.split('\\').pop();

      var fileExtension = this.value.split('.').pop();

      var acceptedExtensions = ['jpg', 'jpeg', 'png'];

      var foundExtension = acceptedExtensions.find(function (ext){
        return ext === fileExtension;
      });

      if (foundExtension == undefined) {

        this.style.border = 'solid red 1px';
        this.style.color = 'red';
        errorDiv.style.display = 'block';
        errorDiv.innerText = 'La imágen debe tener un formato jpg, jpeg, o png';

        errors[this.name] = true;

      } else {

        this.style.border = 'solid black 1px';
        this.style.color = 'rgb(66, 66, 66)';
        errorDiv.style.display = 'none';
        errorDiv.innerText = '';

        delete errors[this.name];

      }
    })
  }
});

theForm.addEventListener('submit', function(event) {

  inputs.forEach(function (input) {
    var inputValue = input.value.trim();
    if (input.value == '') {
      errors[input.name] = true;
    }
  });

  if (Object.keys(errors).length > 0) {
    alert('Debes completar todos los campos');
    console.log(errors);
    event.preventDefault();
  }

})
