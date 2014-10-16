## project 2 - Sm Tamjid
#Password engine rule:
1 - You can put any number into word number field- positive integer
	- negative number will work as 0 count entered
	- if fraction numbers are put, that will be turned into upward integer (e.g., 2.4 will count as 3)
2 - If null or alphabet are submitted system will warn to enter numeric number
3 - if can handle upto 1-699999 numbers, beyond that there is a memory out warning
4- First letter upper case is in the memory and will be set to checked automatically

##Reference
XKCD image from http://xkcd.com/936/
Dictionary words are collected from https://raw.githubusercontent.com/eneko/data-repository/master/data/words.txt
then it was put into local text file

#List of donesss:------
Landing page includes a description of your app - Done
what a xkcd password - Done
Form inputs to specify- done
How many words to use - done
Whether to include a number - check box provided
Whether to include a special symbol (for example, @) - - check box provided
#Extra Challenges-------
How many special characters.> Default to 1 special character
Spaces or camelCase or hyphens>>default space is used.
first letter of each word upper case.>> applied first letter upper case only
Error checking: >>  reported error for null or alphabet into "word number" field
