pwd
cd
pwd
mkdir .ssh
ls
ls -a
chmod 700 .ssh/
touch .ssh/authorized_keys
ls .ssh
chmod 600 .ssh/authorized_keys
nano .ssh/authorized_keys
exit
pwd
sudo yum groupinstall "Development Tools"
sudo yum install kernel-devel kernel-headers
sudo cp /usr/share/zoneinfo/Europe/Rome /etc/localtime
sudo yum update
sudo yum install httpd
sudo /sbin/chkconfig --levels 235 httpd on
sudo /usr/sbin/apachectl start
yum search lynx
ls /etc/httpd/conf.d/userdir.conf
clear
ls /etc/httpd/conf.d/userdir.conf
sudo vim /etc/httpd/conf.d/userdir.conf
sudo chmod o+x /home/jocelynliao
sudo chmod o+rx /home/jocelynliao/public_html
yum search lynx
clear
ls /etc/httpd/conf.d/userdir.conf
sudo vim /etc/httpd/conf.d/userdir.conf
