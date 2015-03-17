# Installation #

First of all you must have Apache Web Server or any web server which support php, php cli is enable for create pool and main directory and apt-utils package must install for create meta data for each repository.

  * check the development trunk : svn checkout http://u-repo.googlecode.com/svn/trunk/ u-repo-read-only
  * rename a directory 'u-repo-read-only' to the name what you want. eg: ubuntu
  * move or copy its to your web dir. eg: /var/www/
  * setup virtual host for your repository web page (optional)
  * edit the config file 'config.inc.php'

> $apturl="http://www.thaiopensource.org/ubuntu";

> $dist="intrepid";

> $repo="main";

> $logo="ubuntuclub-logo.png";

  * copy .deb to pool/main/**charactor**
  * edit the update-repo.sh change the ubuntu version if you don't want to create repository for **intrepid** (8.10)

> rm -rf dists/**intrepid**/Release

> rm -rf dists/**intrepid**/main/binary-i386/

> apt-ftparchive generate apt-ftparchive.conf

> apt-ftparchive -c apt-release.conf release dists/**intrepid** > dists/**intrepid**/Release


  * then update your repo meta data

> ./update-repo.sh