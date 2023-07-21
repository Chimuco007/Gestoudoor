$(document).ready(function () {
  // Quando a categoria for alterada
  $('#provincia').change(function () {
    var provincia = $(this).val();
    console.log(provincia);
    // Faça uma requisição AJAX para obter as subcategorias com base na categoria selecionada
    $.ajax({
      url: 'index.php?op=municipio',
      type: 'POST',
      data: {
        provincia: provincia
      },
      dataType: 'json',
      success: function (response) {
      //console.log(response);
        
        // Limpe o select de subcategorias e adicione as opções retornadas
        $('#municipio').empty().append('<option value="">Selecione</option>');

        $.each(response, function (key, value) {
          $('#municipio').append('<option value="' + value['codMunicipio'] + '">' + value['nome'] + '</option>');
        });

        // Ative o select de subcategorias
        $('#id_subcategoria').prop('disabled', false);


      },
      error: function (response) {
        // Em caso de erro, exiba uma mensagem adequada
        console.log(response);
        alert('Erro ao obter municípios.');
      }
    });
  });
});

$(document).ready(function () {
  // Quando a categoria for alterada
  $('#municipio').change(function () {
    var municipio = $(this).val();
    // Faça uma requisição AJAX para obter as subcategorias com base na categoria selecionada
    $.ajax({
      url: 'index.php?op=comuna',
      type: 'POST',
      data: {
        municipio: municipio
      },
      dataType: 'json',
      success: function (response) {
        // Limpe o select de subcategorias e adicione as opções retornadas
        $('#comuna').empty().append('<option value="">Selecione</option>');

        $.each(response, function (key, value) {
          $('#comuna').append('<option value="' + value['codComuna'] + '">' + value['nome'] + '</option>');
        });

        // Ative o select de subcategorias
        $('#id_subcategoria').prop('disabled', false);


      },
      error: function (response) {
        console.log(response);
        alert('Erro ao obter as comunas.');
      }
    });
  });
});