// Voteskript
function openVoteSite(url) {
	VoteSite = window.open(url, '', 'width=800,height=640,resizable=yes');
	VoteSite.focus();
}


// Allgemeines Ein- und Ausblenden
function switching(id) {
    jQuery('#' + id).slideToggle('fast', '');
}
function switching2(id) {
    jQuery('#' + id).fadeToggle('slow', '');
}

// Ticketsystem
function setNewTicketSub() {
    jQuery.ajax({
        url: "includes/xinc_ajax.php?newTicketMain=" + jQuery("#newTicketMain").val(),
        type: "GET",
        success: function(data){
            jQuery('#newTicketSub').empty().append(data);
        }
    });
}

// Ranking
function getRankingSiege(id) {
    jQuery.ajax({
        url: "includes/xinc_ajax.php?getRankingSiege=" + id,
        type: "GET",
        success: function(data){
            jQuery('#guildsiege').empty().append(data);
        }
    });
}