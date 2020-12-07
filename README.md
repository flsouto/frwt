# FRWT

Stands for Frequent Word Tagger. Reads a text from command line, detect most frequent words and ask user which ones should be tagged. 
Generates a new file with the chosen words tagged between two delimiters ($topen and $tclose vars).

## Usage

```
php run.php path/to/input/text
```

After answering y/n questions the output will be at `path/to/input/frwt.text`. 

## Purpose

The original idea was to use this tool to mark recurrent words on subtitle (.srt) files, for language learning purposes. But I realized it could be useful
for other things, thus the creation of this repository.
