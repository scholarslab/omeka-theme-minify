#!/usr/bin/env bash

#Generate a new project from your HTML5 Boilerplate repo clone
#Created 2010-10-13, Rick Waldron
#Customized for Omeka by Wayne Graham


##first run
# $ cd  omeka-theme-minify/build
# $ sudo chmod a+x createproject.sh && ./createproject.sh

##usage
# $ cd  html5-omeka-theme-minify/build
# $ ./createproject.sh

echo "To create a new Omeka html5-boilerplate project, enter a new directory name:"

read name

cd ..

webroot=$PWD

SRC=$webroot"/html5-boilerplate"
DST=$webroot"/../"$name

if [ -d "$DST" ]
then
    echo "$DST exists"
else
    #create new project
    mkdir $name

    #sucess message
    echo "Created Directory: $DST"
    
    cd $SRC
    
    #copy to new project directory
    #http://en.wikipedia.org/wiki/Cpio#Copy
    #http://cybertiggyr.com/cpio-howto/
    #http://www.cyberciti.biz/faq/how-do-i-use-cpio-command-under-linux/
    find . -depth -print0 | cpio -0pdmv $DST
    

    #sucess message
    echo "Created Project: $DST"
    
    # delete that temporary folder
    rm -r $name
    
    #move into new project
    cd $DST
    
    #in Bourne Again Shell, the cpio was copying 
    #the whole dir into the new project, along with the contents
    if [ -d "$DST/html5-boilerplate" ]
    then
         rm -r html5-boilerplate
    fi        
    
    if [ -e "$DST/createproject.sh" ]
    then
         rm -r createproject.sh
    fi  
    
    if [ -e "$DST/.git" ]
    then
         rm -rf .git
    fi


fi

