import os
import sys
fname = "binary_file.txt"
ftype = sys.argv[1]
inp = open(fname, mode='rb')
base_inp = inp.read()
ofname = 'File_Output.'+ftype
imagen = open(ofname,'wb')
imagen.write(base_inp.decode('base64'))
imagen.close()
#os.system("libreoffice --headless --convert-to pdf "+ofname)
