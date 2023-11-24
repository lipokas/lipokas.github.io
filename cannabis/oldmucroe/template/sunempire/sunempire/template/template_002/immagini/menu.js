var timeout	= 500;
var closetimer	= 0;
var ddmenuitem	= 0;
var ddmenuid = 0;
var vote_interval;

function confirm_link ( lnk, msg )
{
	if ( confirm(msg) )
	{
		window.location = lnk;
	}
}

function vote_update ()
{
	var vote = document.getElementById('vote_container');

	if ( navigator.userAgent.indexOf('MSIE') != -1 )	
		vote.style.left = ((document.body.clientWidth - 380) / 2) + 'px';
	else
		vote.style.left = ((window.innerWidth - 380) / 2) + 'px';
}

function vote_submit ()
{
	clearInterval(vote_interval);
	
	var vote = document.getElementById('vote_container');
	var vote_bg = document.getElementById('vote_bg');
	//var vote_form = document.getElementById('vote_form');
	
	vote.style.display = 'none';
	vote_bg.style.display = 'none';
	//vote_form.submit();

document.cookie = "sunempire_vote=sunempire_vote;";
}

function vote_run ()
{
	vote_update();
	vote_interval = setInterval("vote_update();",500);
}

function mopen(id)
{	
	mcancelclosetime();
	if(ddmenuitem) ddmenuitem.style.display = 'none';
	//if(ddmenuitem) new Effect.BlindUp(ddmenuid, { duration: 0.3 } );
	
	ddmenuid = 'm' + id;
	ddmenuitem = document.getElementById('m'+id);
	ddmenulink = document.getElementById('l'+id);
	ddmenuitem.style.width = ddmenulink.offsetWidth + 'px';
	
	if ( navigator.userAgent.indexOf('MSIE') != -1 )
	{
		ddmenuitem.style.display = 'block';
	}
	else
	{
		new Effect.BlindDown(ddmenuid, { duration: 0.3 });
	}
}

function mclose()
{
	if(ddmenuitem) 
	{
		mcancelclosetime();
		ddmenuitem.style.display = 'none';
		//new Effect.BlindUp(ddmenuid, { duration: 0.3 });
	}
}

function mclosetime()
{
	closetimer = window.setTimeout(mclose, timeout);
}

function mcancelclosetime()
{
	if(closetimer)
	{
		window.clearTimeout(closetimer);
		closetimer = null;
	}
}

document.onclick = mclose;















function expand_news ( id )
{
	new Effect.toggle( 'content_' + id , 'appear' , { duration: 0.3 } );
	new Effect.toggle( 'content_short_' + id , 'appear' , { duration: 0.3 } );
}
