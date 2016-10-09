/************10/9/2016******************\

added methods for status manipulation in database.php.

added locking of account in login.

fixed a logic bug in account_change.

removed username xss prevention in login (not needed).

replaced $db = $_SESSION['db'] with $db = new Database() 
in login.php and account_change.php, storing the db instance 
in a Session variable cause a serilize/unserlize
error when generating a new session id. 

changed Parser.php, gave a warning about unsupported charset 
(think that it still will prevent xss, not 100% sure though)

fixed some other small bugs.

/***************************************\

