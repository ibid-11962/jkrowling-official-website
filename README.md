# JK Rowling's Official Website

Between 2004 and 2012 JK Rowling had an interactive flash website where one could explore her cluttered desktop, and discover new information about the Harry Potter books and unlock hidden content. During the writing of the last two Harry Potter books, she used the site to post answers to about 150 short questions, about 25 essays, 14 scanned documents, and around 50 blog post updates. Of special note are three insanely difficult "W.O.M.B.A.T. trivia tests that were released there. In February 2012, the site was completely taken offline and replaced with a more bland author website.

This project is a non-profit preservation of that original website. Everything is fully functional as it was in the original, with all the animations, sounds, puzzles, and easter eggs. Most of the multilingual versions are supported as in the original, and there is even an option to view the site from different points in time.

## Installation

The full project is about 100mb, and includes all the different versions of the site as was originally available (multilingual, flash, text-only, accessibility). Smaller individual releases are provided for the flash and text-only versions of all the languages that are completely translated. [A live version is also available.](https://www.therowlinglibrary.com/j-k-rowling/official-website/)

**v1.0 — initial release**

- [Full Site](https://github.com/jkrowling-official-website/jkrowling-official-website/archive/v1.0.zip) (The entire website)

- [English flash site](https://github.com/jkrowling-official-website/jkrowling-official-website/archive/v1.0-en.zip)  
- [French flash site](https://github.com/jkrowling-official-website/jkrowling-official-website/archive/v1.0-fr.zip)  
- [Spanish flash site](https://github.com/jkrowling-official-website/jkrowling-official-website/archive/v1.0-es.zip)  

- [English text-only site](https://github.com/jkrowling-official-website/jkrowling-official-website/archive/v1.0-en-html.zip)    
- [French text-only site](https://github.com/jkrowling-official-website/jkrowling-official-website/archive/v1.0-fr-html.zip)  
- [Spanish text-only site](https://github.com/jkrowling-official-website/jkrowling-official-website/archive/v1.0-es-html.zip)  

The text-only releases do not require any special setup and can be run by simply unzipping them and opening the index.html file.

The other releases will need to be unpacked onto a PHP server, and will need a flash enabled browser to run. They can still be run completely locally using EasyPHP. [See here for directions on how to set this up on a Windows computer using EasyPHP.](https://github.com/jkrowling-official-website/jkrowling-official-website/blob/master/EasyPHP.md)

## Usage

After you open the site and choose the language, you'll be brought to JK Rowling's desk. You can move the mouse around to see little rollover text for each interactible object. Different objects will bring you to different sections, such as FAQ, News, Rumours, Rubbish Bin, Extra Stuff, Links, Fan Sites, Wizard of the Month, Scrapbook, WOMBAT results, and the Secret Door.

Most of the site is pretty self-explanatory, but two points bear mentioning.

1. The Scrapbook stores the scans of JK Rowling's notes that you've unlocked throughout the website. Most of puzzles all have clues, and you explore hard enough you should find most of them. 
2. The pink eraser takes you the secret door. It's open now showing the next generation family tree, but it used to always be locked with a "Do Not Disturb" sign. Every so often the sign would come off for a few days and with some difficult puzzle solving the door could be opened to show something like the title of the next Harry Potter book, or a difficult WOMBAT exam. The last two openings didn't have puzzles. To see any of the previous openings you have to adjust the date on the time turner in the lower right corner.

[A more in depth guide, including detailed solutions to all Scrapbook content and door openings can be found here.](https://www.therowlinglibrary.com/j-k-rowling/official-website/guide/)

You can change some settings by opening up config.ini in a text editor. These setting will let you do things like see how the site looked on a different date (it changed a lot over time) or see the birthday message when it isn't a character's birthday.

## Contributing

This project is more or less complete, but be sure to report any bugs you encounter. The only parts really known to be missing or some of the translations. We've gotten the missing parts of the French and Spanish translations fan-translated, but the Italian, German, and Japanese translations still need some work.

There is about 3,000 words from the German and Italian translations that still need to be translated.

The Japanese version is more incomplete, with about 40,000 missing words. The Japanese flash files also have some bugs, as a lot of the files were missing and substituted with their files, or are more outdated than files they're trying to match up with.

Theoretically it should be possible to translate the site into other languages as well. I'd estimate that would require around 50,000 – 60,000 words to be translated, not to mention other edits made to try adding a language option. I think the most straightforward way would be to duplicate everything and just replace an existing language.

[If you want to take a crack at the finishing the German and Italian text, you can find more directions over here.](https://github.com/jkrowling-official-website/jkrowling-official-website/blob/master/Contributing_Translations/Contributing%20Translations.md) Contact me if you want to try working on the Japanese stuff.

## Credits

The flash files were all preserved by Roonwit. Much editing and tinkering was done to bring the site to full functionality, but without his meticulous archive of over 3,000 files from the original website, none of this would be possible.

Most of the non-English text comes from the Wayback Machine. Although they don't do a great job at preserving flash sites, they did preserve the text-only sites, which is where nearly all the French, Spanish, German, and Italian text was here taken from.

The French translation was finished by [Gazette du Sorcier](http://www.gazette-du-sorcier.com/) and [Univers Harry Potter](https://universharrypotter.com/).

The Spanish translation was finished by [HarryLatino](https://www.harrylatino.com/).

[More inforamtion can be found here.](https://github.com/jkrowling-official-website/jkrowling-official-website/blob/master/documentation.md)

## License

The original website was made by Lightmaker and copyrighted to JK Rowling.

The changes that needed to be made to get this running and the new code that had to be written can be used as you see fit.
