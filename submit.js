function SubmitFormData() {
    var fname = ["fname"].val();
    var lname = $("lname").val();
    var address = $("address").val();
    var city = $("city").val();
    var state = $("state").val();
    $.post("submit.php", { fname: name, lname: lname, address: address, city: city, state: state },
    function(data) {
	 $('#results').html(data);
	 $('#superForm')[0].reset();
    });
}