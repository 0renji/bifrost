# bifrost
Homepage that displays own artworks, creator data and fulfills the purpose of a portfolio.

    ---setting up---

	follow steps here https://symfony.com/download

		--or --

	on linux
	
	--symfony--
		execute -> wget https://get.symfony.com/cli/installer -O - | bash
		then move the folder to use globally -> sudo mv /home/USERNAME/.symfony/bin/symfony /usr/local/bin/symfony

		open up a new console and try -> symfony

		if it doesn't work repeat the first execute and read the displayed instructions

		if it works install the webserver trust certificate -> symfony server:ca:install

		it happens that the certiurl package is missing which hinders the automatic installation of the certificate into your browser trust store
		run -> apt install libnss3-tools
		rerun -> symfony server:ca:install

	--composer--
        the composer files are with your first pull
        so the only thing you need to run inside the bifrost directory
        is -> composer update 
        
        maybe not needed:   
            to install the application logger 
            run -> composer require logger

    now go into the project directory
    run -> symfony serve
    or -> symfony -d serve 

    you can abandon the first with ctrl + c
    the second one runs the webserver as a daemon in the background and keeps logs in a log file
    you can abandon this one through -> symfony server:stop
    which you can access through -> symfony server:log

    now check if errors occured during the startup, open the browser and go on localhost:8000

	



