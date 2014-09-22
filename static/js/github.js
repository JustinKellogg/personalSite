(function($) {
  $.fn.gitHome = function(){

    var username = "JustinKellogg"
    var requri   = 'https://api.github.com/users/'+username;
    var repouri  = 'https://api.github.com/users/'+username+'/repos';

    $.getJSON(requri, function(json, textStatus, jqXHR) {
        var fullname   = json.name;
        var username   = json.login;
        var aviurl     = json.avatar_url;
        var profileurl = json.html_url;
        var location   = json.location;
        var followersnum = json.followers;
        var followingnum = json.following;
        var reposnum     = json.public_repos;

        if(fullname == undefined) { fullname = username; }

        $('.smallname a').attr('href', profileurl);
        $('.smallname a').html(username);
        $('.avi a').attr('href', profileurl);
        $('avi a').attr('alt', username);
        $('.avi img').attr('src', aviurl);
        $('.ghcontent p').html('Followers: '+followersnum+' - Following: '+followingnum+'<br>Repos: '+reposnum) 


        var repositories;
        $.getJSON(repouri, function(json){
          repositories = json;
          outputPageContent();
        });

        function outputPageContent() {
          if(repositories.length == 0) { outhtml = '<p>No repos!</p></div>'; }
          else {
            outhtml = '<p><strong>Repos List:</strong></p> <ul>';
            $.each(repositories, function(index) {
              outhtml = outhtml + '<li><a href="'+repositories[index].html_url+'" target="_blank">'+repositories[index].name + '</a></li>';
            });
            outhtml = outhtml + '</ul>';
          }
          $('#repolist').html(outhtml);
        }
    });
  };
})(jQuery);

jQuery(function() {
    $('#github-tabs').tabs({ show: {effect: 'blow', duraction: 500} });
    $.fn.gitHome();
});

