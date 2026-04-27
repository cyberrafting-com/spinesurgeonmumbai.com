import os, glob
directory = r'c:\xampp\htdocs\spinesurgeonmumbai.com\resources\views\blog\*.blade.php'
files = glob.glob(directory)
target = '<h1 style="color: #ffffff; text-align: center;">'
replacement = '<h1 style="font-size: 18px; color: #ffffff; text-align: center; padding: 10px;">'
count = 0
for filepath in files:
    with open(filepath, 'r', encoding='utf-8') as f:
        content = f.read()
    if target in content:
        content = content.replace(target, replacement)
        with open(filepath, 'w', encoding='utf-8') as f:
            f.write(content)
        count += 1
print(f'Updated {count} files.')
