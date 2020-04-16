import os

file = open("index.php", "r")  
print(file.read()) 
f1=open("out2.txt","w")
path = 'C:/wamp64/www/travel'

files = []
# r=root, d=directories, f = files
for r, d, f in os.walk(path):
    for file in f:
        if '.php' in file in file:
            files.append(os.path.join(r, file))
print(files)
for f in files:
    f1.write(f)
    f1.write("\n")
    file=open(f, "r", errors='ignore')  
    print('writing',f)
    f1.write(file.read())
    f1.write("\n")
    print('written',f)
