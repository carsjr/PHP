      function nextfield(field)
      {
        $(field).focus();
      }

      function id(el) {

        return document.getElementById(el);

      }


      function mostra() {

        id('dependente1').style.display = 'block';

        id('btn').style.display = 'none';     

      }


      function esconde() {

        id('dependente1').style.display = 'none';

        id('btn').style.display = 'block';

      }

      function spanTitular(){
        var fullNameTit = id('fullNameTit').value;
        id('spanTitular').innerHTML = fullNameTit;

        var rgTit = id('rgTit').value;
        id('spanRgTit') .innerHTML = rgTit;

      }

      function modalOn() {
        id('alertCadastroTitular').style.display = 'block';
        spanTitular();

        }

      function modalOff() {
          id('alertCadastroTitular').style.display = 'none';

          }
      function concluirCadastroTitular(){

        modalOn();

        //id('form_titular').submit();

      }

      function btn_proximo() {

          id('div_titular').style.display = 'none';

          id('div_depen').style.display = 'block';


      }

