# FRWT

Stands for Frequent Word Tagger. Reads a text from command line, detect most frequent words and ask user which ones should be tagged. 
Generates a new file with the chosen words tagged between two delimiters ($topen and $tclose vars).

## Usage

```
php run.php path/to/input/text
```

After answering y/n questions the output will be at `path/to/input/frwt.text`. 
