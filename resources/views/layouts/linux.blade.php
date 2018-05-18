
      <textarea id="txta">
      
      Linux commands

GENERAL
control c //kills ongoing process if we mess up something
control  z //stops process like unzip
nohup unzip file.zip    //  put process in background and continues to run if we exit terminal
ctrl  l //clear
./file //pokretanje filova
ls -lah (long ,all, human readeable)
ls -lahS //file SIze
ls ../some_file //check folder content from folder above
ls /bin/somefile // list folder content in any loc 
ls -al / > list.txt // put  that list into a file that is made instantly.
pushd /goes to destination folder
popd returns back to previous folder
pwd //prints curent folder
locate //file ..
which //search for commands
file .filename //determines type of selected file (jpg, folder ...)
history  //history of commands


HELP:
whatis cal  // display small information about selected 
ls --help 
man

DIRECTORY/FILE MANIPULATION
mkdir
rmdir
mk
touch some_file//it opens a file , if not exist it creats
cp   some_file   some_file.BACKUP   //copies file from current folder and rename it
cp /tmp/test/some_file    changed_name_file // copies from some DIR into DIR that we are in
cp some_file ../DIR/ 
cp {test1,test2}  /usr/temp  //multifile copy files  from within source folder .   to dest.
cp  /tmp/supa/{test666,test999} /tmp/trd //copy within dest. folder from source.
cp /tmp/supa/* /tmp/trd   copy all files within source folder to dest. folder
rm -rf //delete folder and all contents(recursive,force)
rm /path/to/dir/*  // deletes only all files within DIR , 
rm * //// deletes only all files within PRESENT DIR
rm file* // file servers as wildcard like %file%
rmdir * //erase  all empty dirs
cp -r dir1 dir2
mv !(fail_games) good_games  // within dest. folder move everything except selected folder/file
mv //same princip as cp but it cuts insted or rename
scp -r  some_file root@IP_adress:/tmp   //server copy



NANO
ctrl -x //save

LINK  / LN
link file1.txt file2.txt // hard links those 2 files , what we type in one file will be affected in another file
			//if we erase one file the other remain intact
ln file1.txt file2.txt  //hard link
we can use ln to make shortcuts on long filenames:
ln -s  documents/work/budgets/Engineering/2014/April   short_name  
//in this example we make long path  link to short_name ! and we can use that short name more usefully.
// -s indicates on soft link 
//in soft links erasing one file will make other unavailable
//we can make ln of directorys also , but only soft links
 HARD LINK        SOFT LINK


LESS
q quit
/search_text  //search true doc downwards
n key for next word
? //search true doc UPwnwards
ls -lahS | less // puts lsit search in less
u - up half page
d - down half page
k - scroll single line up
j - scroll single line down
-i - case insensitive searching unless pattern contains capitals (as clo or in less)
/  /pattern/ - search (used with n)
-p /pattern/ open file at /pattern/ (as clo)
& /pattern/ show lines containing /pattern/ (like grep)
m //mark something then klik singleqote 'm and return to marked place

CAT  + INPUT / AUTPUT
-------------
touch notes.txt //create notes.txt
cat >> notes // inserts text at the bottom  in existing file  without entering editor
		//it appends to existing content
White text here and save text with CTRL + D
----------
cat > file  //will create NEW file and  enables you to write text without editor
	// > will override  existing content 
cat file 1 file2 // concatonate 2 files in one
Reverse Input:
wc -l < test.txt  //wc (word count) disp n of lines in this file < indicates reverse input



PIPE EXAMPLES

These 2 examples do the same thing:
wc   -l  < some _file  //reverse inputy
cat some_file | wc –l // get contents of some_file and pipe it to another method . autputs number o
      lines in some_file___
____________



WGET
stands for "web get". It is a command-line utility which downloads files over a network.
wget http://website.com/files/file.zip  //downloads to working DIR


CURL
curl 
curl is like wget but used to download  web content it supports more protocols then wget
and it can download multiple URL’s in same command
curl -o <filenametocreate> <URL> // saves content to a file
curl -O <URL> //gives name to file by a portion of url
curl -s -O <URL> // to run curl silently
GREP
searches plain text. It takes whatever input you provide and searches for a specific search term, or “string.
A grep command has three parts: the command, the search string, and the search target. If no search target is specified, grep will search the “standard input,” or whatever is currently displayed on the command line.
grep “test2322” log.03_09_2018
•	.: the period character is a wildcard, meaning that any character (except for a newline) will match it.
•	^: the caret indicates a match must occur at the start of a word boundary. Use this at the start of your search string.
•	$: the dollar sign indicates a match must occur at the end of a word boundary. Use this at the end of your search string.
•	*: repeat the previous character as many times as necessary to get a match. For example, 0* would match one or more zeros.
•	\d: match any digit.
•	\w: match any alphanumeric character.
•	{n}: repeat the previous character exactly n times. For example, w{3} would match the string www but not ww.
•	-i: ignore case when matching. For example, grep -i unix would return Unix, UNIX, unix, uNIX and more.
•	-r: search recursively, examining each file in the provided directory.
•	-w: use “whole word” matches. Words, in grep’s definition, are text strings surrounded by whitespace. For example, if you use grep -w book foo.txt, “booklet” would not be a valid match.
•	-x: like word matches, but for entire lines instead of words.
•	-l: returns only the names of files containing a valid match
•	-v: returns all terms that don’t match the search string.
•	-n: list the line number for each match.
•	-e: indicates that the following text is a search term formatted as a regular expression. Is most useful for specifying more than one simultaneous search string, or for regular expressions that start with a dash
WC
Word count
wc //alone  will display 3 numbers  (number of lines, n of words, n of bites ) 
wc -l : Prints the number of lines in a file.
wc -w : prints the number of words in a file.
wc -c : Displays the count of bytes in a file.
wc -m : prints the count of characters from a file.
wc -L : prints only the length of the longest line in a file.
wc -l < test.txt //disp n of lines in this file
 SUDO USER & PERMISSIONS
sudo -s  //temporarely sudo usage
exit //to exit sudo
su - john // change user , asks for passwordwget
su - //login as root
users //to see who is logged in terminal
id //info about user
-------------------
(owner perm,group perm,everybody else perm)
-rwxr-xr-x    r-read w-write x-execute
-rw-r--r-- 
drwxr-xr-x 
------------------
change permissions:
MAKE SURE TO CHEK FOLDER PERMISSIONS ALSO
chmod 700 file1 //in this case maks it rwx for user only
0	---	No access.
1	--x	Execute access.*
2	-w-	Write access.**
3	-wx	Write and execute access.***
4	r--	Read access.
5	r-x	Read and execute access.
6	rw-	Read and write access.
7	rwx	Read, write and execute access.
The first mode field is the "special file" designator;
drwxrwxrwx // d stands dorr directory  default is -(none)
d (directory)
c (character device)
l (symlink) ln links
p (named pipe)
s (socket)
b (block device)
D (door, not common on Linux systems, but has been ported)

PROCESS
killall firefox
ps -eaf //everyone,all,full
kill -9 process_id_HERE // kill PROCESS

WILDCARDS
ls *.html *.txt
rm *xxx*
file ??? //? Represents single character
file a????
ls *.???
file *[xyz]* //will get any name that have selected letters within
ls *.[xyz]*
file [a-f]*
file *[0-9]*
ls jones[0-9][0-9][0-9]


mysqldump
Making Backups with mysqldump
mysqldump --user=admin_backup --password --lock-tables --all-databases > /data/backup/dbs.sql     //all dbs
mysqldump --user=admin_backup --password --lock-tables --databases db1 db2 > /data/backup/db1.sql      //single db or few
mysqldump --user=admin_backup --password --lock-tables db1 table1 > /data/backup/db1_table1.sql    //db+tables

      </textarea>
  

