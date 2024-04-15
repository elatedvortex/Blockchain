from Crypto.Cipher import AES
import base64

def decrypt_aes_ecb(ciphertext, key):
    cipher = AES.new(key, AES.MODE_ECB)
    plaintext = cipher.decrypt(ciphertext)
    return plaintext.decode('utf-8')

def main():
    with open("words.txt", "rb") as file:
        encoded_ciphertext = file.read()
    key = b'YELLOW SUBMARINE'
    ciphertext = base64.b64decode(encoded_ciphertext)
    plaintext = decrypt_aes_ecb(ciphertext, key)
    print(plaintext)
    with open("wordsans.txt", "w") as output_file:
        output_file.write(plaintext)
if __name__ == "__main__":
    main()
