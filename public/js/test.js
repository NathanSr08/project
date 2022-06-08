function confirmer(id,nom){
    var res = confirm("Êtes-vous sûr de vouloir supprimer "+nom+"?");
    if(res){
        document.location.href="/admin/del_fd/"+id; 
    }
}