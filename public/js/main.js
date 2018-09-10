const items = document.getElementById('items');

	if (items) {
  items.addEventListener('click', e => {
    if (e.target.className === 'btn btn-danger delete-item') {
      if (confirm('Estas seguro?')) {
        const id = e.target.getAttribute('data-id');
        // console.log(id);
        fetch("/item/delete/" + id, {
          method: 'DELETE'
        }).then(res => window.location.reload())
        .catch(console.log("ha ocurrido un error"));
      }
    }
  });
}