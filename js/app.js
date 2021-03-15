document.querySelector(".first").addEventListener('click', function () {
  Swal.fire({
    template: '#my-template'

  }).then((result) => {
    if (result.isConfirmed) {
      let name = $(".name").val()
      let phone = $(".phone").val()
      let email = $(".email").val()
      let address = $(".address").val()
      let area = $(".area").val()
      let subArea = $(".subArea").val()
      let zip = $(".zip").val()
      let alert = $(".alert").val()
      let province = $(".province").val()
      let tracking = $(".tracking").val()
      let price = $(".price").val()
      let amount
      let typeProduct
      let surFacePaper
      let typePaper
      let size
      let file
      console.log('8;p')
      // console.log(file)
      $('#resultBuying tr').each(function () {
        file = $(this).find(".file").html();
        size = $(this).find(".size").html();
        typePaper = $(this).find(".typePaper").html();
        surFacePaper = $(this).find(".surFacePaper").html();
        typeProduct = $(this).find(".typeProduct").html();
        amount = $(this).find(".amountProduct").html();
        price = $(this).find(".price").html();
      });
      //console.log(typeof(file));
      $.ajax({
        type: 'POST',
        url: 'insert.php',
        //data: name,
        data: {
          // nameCus: $(".name").val(),
          name: name,
          phone: phone,
          email: email,
          address: address,
          area: area,
          subArea: subArea,
          zip: zip,
          alert: alert,
          amount: amount,
          typeProduct: typeProduct,
          surFacePaper: surFacePaper,
          typePaper: typePaper,
          size: size,
          province: province,
          tracking: tracking,
          price: price,
          file: file

        },
        success: function (data) {
          console.log("Test : " + tracking)
          console.log("Response: " + data);

        },

      });
      Swal.fire(
        'การสั่งซื้อสำเร็จ!',
        'ขอขอบคุณ คุณลูกค้าเป็นอย่างสูงค่ะ',
        'success'
      ).then(() => {
        location.reload();
      })
    }
  })
});

