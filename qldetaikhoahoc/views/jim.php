<div class="content-wrapper" style="min-height: 427px;">

  <section class="content">

    <div class="container-fluid">

      <form id="jim">

        <input type="submit" value="click me" />  

      </form>

      <div id="jim_result"></div>

    </div>

  </section>

</div>

<style>

.td {

  padding: 5px 10px;

}

</style>

<script src="../public/plugins/jquery/jquery.min.js"></script>

<script>

jQuery.noConflict();

jQuery(document).ready(function($) {

  $('#jim').submit(function(e) {

    $.get("/api/", function(data, status){

      var _data = JSON.parse(data);

      var _counter = 0;

      var _view = '<table><tbody><tr><th>Name</th><th>Return</th></tr>';

      console.log('call api:', "Data: ", data, "Status: ", status);

      if(status === 'success') {

        $.each(_data.apis, function(ind, el) {

          _view += '<tr><td>' + el.param + '</td><td>' + el.return + '</td></tr>';

          _counter++;

        });

        _view += '</tbody></table>';

        $('#jim_result').html(_view);

        alert('has ' + _counter + ' results');

      } else {

        $('#jim_result').html('<strong>No result found!</strong>');

        alert('something wrong!');

      }

    });

    return false;

  });

});

</script>



