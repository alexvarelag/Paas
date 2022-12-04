<?php 
	$session = session()->get('key');
	
	foreach($session as $value)
	{
        $idUser = $value['id'];
		$name = $value['name'];
        $lastname = $value['lastname'];
	}
?>

<head>
    <nav id="ess" class="navbar navbar-expand-lg navbar-light bg-light navbar-dark bg-dark">
        <x-head></x-head>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0"></ul>

            <div class="dropdown float-right">
                <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="img/user.png" alt=""><?php echo " ".$name." ".$lastname; ?>
                </button>

                <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{ url('/logout') }}">Logout</a>
                </div>
            </div>
        </div>
    </nav>
</head>