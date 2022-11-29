from deep_translator import GoogleTranslator

membukafile = open("transite.txt", "r")
baca = membukafile.read()

to_translate = baca
translated = GoogleTranslator(source='id', target='en').translate(to_translate)
print(translated)