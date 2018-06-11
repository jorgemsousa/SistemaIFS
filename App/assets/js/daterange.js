
           //FUNÇÂO DO DATERANGEPICKER PERINI
            $(function() {
              var start = moment().subtract(29, 'dias');
                function cb(start) {
                   $('#dataRperini span').html(start.format('DD-MM-YYYY'));
                }
              $('#dataRperini').daterangepicker({
                singleDatePicker: true,
                startDate: start,     
               }, cb);
              cb(start);
            });
            //FIM DO DATERANGEPICKER PERINI