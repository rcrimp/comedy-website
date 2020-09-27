var headers = {
    'Accept':'application/json'
  };
  
  $.ajax({
    url: 'https://api.trybooking.com/NZ/reporting/v1/event',
    method: 'get',
  
    headers: headers,
    success: function(data) {
      console.log(JSON.stringify(data));
    },
    beforeSend: function (xhr) {
      xhr.setRequestHeader ("Authorization", "Basic " + btoa("NTdFNEU0NTAyRTg1QTc2OEMyNTQyOTZFRUE4RUE0NTQ6QkY4RkUxNTg5RURGODc5OUM1QkE5QTM2OEIxMzI3NEY"));
    },
  })