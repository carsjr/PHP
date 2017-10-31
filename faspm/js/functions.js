      function id(el) {

        return document.getElementById(el);

      }

      function mostraFormDependente() {

        id('divFormDependente').style.display = 'block';

      }
      function spanTitular(){
        var fullNameTit = id('fullNameTit').value;
        id('span-msg').innerHTML = fullNameTit;

        //$('#idCampo').val()

        var rgTit = id('rgTit').value;
        id('spanRgTit') .innerHTML = rgTit;

      }

      function liberaFormDependente() {
          var fullNameTit = id('fullNameTit').value;
          id('span-msg').innerHTML = fullNameTit;
      }

      function modalOn() {
        id('myModal').style.display = 'block';
        id('myModal').className = 'modal fade in';
      }

      function modalOff() {
          id('myModal').style.display = 'none';


          }
      function concluirCadastro(){
          //modalOn();

      }

      function confirmaForm() {

            modalOn();

            var fullNameTit = id('fullNameTit').value;
            id('spanFullNameTit').innerHTML = fullNameTit;
        }


      //variaveis globais transição MODAL
      var fullNameTit = '';


      //guarda valores na variavel global para transição
      function guardaValor(element,id){
          switch (id){
              case 'fullNameTit':
                  fullNameTit = element.value;
                  escreveValor(id);
                  break;
          }
      }

      //escreve valores na modal
      function escreveValor(idContent){
          var idModal = idContent + "Modal";
          switch (idModal){
              case 'fullNameTitModal':
                  id(idModal).value = fullNameTit;
                  break;
          }

      }






      //scripts para máscara de form
        $(document).ready(function(){
            $('#cpfTit').mask('000.000.000-00', {reverse: true});
        })
        $(document).ready(function(){
            $('#rgTit').mask('00.000.000-0', {reverse: true});
        })
        $(document).ready(function(){
            $('#foneTit').mask('(00) 0000 0000', {reverse: true});
        })
        $(document).ready(function(){
            $('#celTit').mask('00.0000.0000', {reverse: true});
        })


