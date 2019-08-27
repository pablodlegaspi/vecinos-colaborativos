var select = document.querySelector('[name=country]');
var countryInSettings = document.getElementById('country-in-settings');

fetch('https://restcountries.eu/rest/v2/all')
  .then(function(response) {
    return response.json();
  })
  .then(function(data) {
    for (var country of data) {
      select.innerHTML += `<option value="${country.alpha2Code}">${country.name}</option>`;
    }
    if (countryInSettings != undefined) {
      countryInSettings.innerHTML = 'acá debería ir el país';
    }
  })
  .catch(function(error){
    console.log(error);
  });
