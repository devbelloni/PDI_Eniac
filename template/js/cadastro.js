///////////////////////////////////////////////////////////////////////////////////
//API DE VALIDAR O CEP   
    // Faz a chamada à API para validar o CEP
    document.getElementById('signUpForm').addEventListener('change', function() {
      var cep = document.getElementById('cepInput');
      cep = this.value;
      const logradouroInput = document.getElementById('logradouroInput');
      const bairroInput = document.getElementById('bairroInput');
      const localidadeInput = document.getElementById('localidadeInput');
      const ufInput = document.getElementById('stateInput');
      const enderecoContainer = document.getElementById('enderecoContainer');

      enderecoContainer.classList.remove('error');
      logradouroInput.value = '';
      bairroInput.value = '';
      localidadeInput.value = '';
      ufInput.value = '';

      fetch(`https://viacep.com.br/ws/${cep}/json/`)
        .then(response => response.json())
        .then(data => {
          if (data.erro) {
            enderecoContainer.classList.add('error');
            throw new Error('CEP não encontrado.');
          }

          logradouroInput.value = data.logradouro;
          bairroInput.value = data.bairro;
          localidadeInput.value = data.localidade;
          ufInput.value = data.uf;
        })
        .catch(error => {
          enderecoContainer.classList.add('error');
          console.log(error);
        });
    });



///////////////////////////////////////////////////////////////////////////////////

// functions

// validation input system
