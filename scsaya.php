#!//bin/bash

clear
echo "\33[0;32m selamat datang om di tools kami"
        sleep 3
echo "    ╦═╗╦ ╦╔═╗╦ ╦╔═╗╦═╗"
echo "    ╠╦╝║ ║╚═╗╠═╣║╣ ╠╦╝"
echo "    ╩╚═╚═╝╚═╝╩ ╩╚═╝╩╚═"
echo "--------------------------------------------------"
        sleep 3
echo "\33[36;1m silahkan di pilih om : "
echo "\33[37;1m"
    sleep 2
      echo "\33[1;33m ( 1 ) LITEDDOS"
      echo "\33[32;1m ( 2 ) bug hunter"
      echo "\33[36;1m ( 3 ) exit"
      echo "---------------------------------------"
read -p "\33[31;1m masukkan pilihan anda ton : " pilih ;
if [ $pilih = "1" ] ;
then
     echo "installing LITEDDOS......"
     cd $HOME
     apt update
     apt upgrade
     pkg install python2
     apt install git
     git clone https://github.com/4L13199/LITEDDOS
    cd LITEDDOS
    python2 LITEDDOS.py
echo "succespuly....."
   sleep 2
elif [ $pilih = "2" ];
then
        echo "\33[36;1m tunggu om,yang sabar ya..."
        cd $HOME
        pkg update
        pkg upgrade
        apt update
        apt upgrade
        pkg install python2
        pkg install git
        git clone https://github.com/thehackingsage/bughunter
        cd bughunter
        ls
        python2 bughunter.py
   echo "succesfuly...."
elif [ $pilih = "3" ];
then
        echo "terimakasih om dada....."
        sleep 2
        exit
else
       echo "eror bos kuh anda salah memasukan nya"
       sleep
       echo $ulang
fi