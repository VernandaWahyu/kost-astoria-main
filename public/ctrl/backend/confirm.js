// Konfirmasi pembayaran
$(document).on('click', '#reject', function () {
  var id = $(this).attr('data-id-reject');
  $.get('/pemilik/reject-payment', {'_token' : $('meta[name=csrf-token]').attr('content'),id:id}, function(_resp){
    window.location.href = "booking-list";
  });
});

// In-Active Promo
$(document).on('click','#inactive', function () {
  var id = $(this).attr('data-id-inactive');
  $.get('/pemilik/promo/inactive-promo', {'_token' : $('meta[name=csrf-token]').attr('content'),id:id}, function(_resp){
    window.location.href = "promo";
  });
});


// Done Sewa Kamar
$(document).on('click','#done', function () {
  var id = $(this).attr('data-id-done');
  $.get('/pemilik/done-sewa', {'_token' : $('meta[name=csrf-token]').attr('content'),id:id}, function(_resp){
    window.location.href = "booking-list";
  });
});

// Delete Booking
$(document).on('click', '#delete', function () {
  if (confirm('Apakah Anda yakin ingin menghapus booking ini?')) {
    var id = $(this).attr('data-id-delete');
    $.get('/pemilik/delete-booking', {'_token' : $('meta[name=csrf-token]').attr('content'),id:id}, function(_resp){
      window.location.href = "booking-list";
    });
  }
});

