import os
import re
from PIL import Image

BASE_DIR = r"C:\xampp\htdocs\spinesurgeonmumbai.com"
IMG_DIR = os.path.join(BASE_DIR, 'resources', 'assets', 'img')
VIEWS_DIR = os.path.join(BASE_DIR, 'resources', 'views')

def convert_images_to_webp():
    print(f"Converting images in {IMG_DIR} to WebP...")
    converted_count = 0
    for root, dirs, files in os.walk(IMG_DIR):
        for file in files:
            if file.lower().endswith(('.png', '.jpg', '.jpeg')):
                filepath = os.path.join(root, file)
                webp_path = os.path.splitext(filepath)[0] + '.webp'
                
                if not os.path.exists(webp_path):
                    try:
                        with Image.open(filepath) as img:
                            img.save(webp_path, 'webp', optimize=True, quality=85)
                            converted_count += 1
                            print(f"Converted {file} to WebP")
                    except Exception as e:
                        print(f"Failed to convert {file}: {e}")
    print(f"Total images converted: {converted_count}")

def process_blade_files():
    print(f"Processing blade files in {VIEWS_DIR}...")
    updated_count = 0
    
    # Regex to find <img ... src="{{ asset('resources/assets/img/...') }}" ... >
    img_tag_pattern = re.compile(r'<img\s+([^>]+)>', re.IGNORECASE)
    src_pattern = re.compile(r'src=["\']([^"\']+)["\']', re.IGNORECASE)
    
    for root, dirs, files in os.walk(VIEWS_DIR):
        for file in files:
            if file.endswith('.blade.php'):
                filepath = os.path.join(root, file)
                with open(filepath, 'r', encoding='utf-8') as f:
                    content = f.read()
                
                original_content = content
                
                # Replace .jpg and .png with .webp in asset strings
                content = re.sub(r'(\{\{\s*asset\([\'"]resources/assets/img/[^\'"]+)\.(jpg|jpeg|png)([\'"]\)\s*\}\})', r'\1.webp\3', content, flags=re.IGNORECASE)
                
                if content != original_content:
                    with open(filepath, 'w', encoding='utf-8') as f:
                        f.write(content)
                    updated_count += 1
                    print(f"Updated {file}")
                    
    print(f"Total blade files updated: {updated_count}")

if __name__ == "__main__":
    convert_images_to_webp()
    process_blade_files()
    print("Optimization complete!")
