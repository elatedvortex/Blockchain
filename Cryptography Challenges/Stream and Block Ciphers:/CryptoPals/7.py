from Crypto.Cipher import AES
import base64

def decrypt_aes_ecb(ciphertext, key):
    cipher = AES.new(key, AES.MODE_ECB)
    plaintext = cipher.decrypt(ciphertext)
    return plaintext.decode('utf-8')

def main():
    # Read the Base64-encoded ciphertext from a file
    with open("words.txt", "rb") as file:
        encoded_ciphertext = file.read()

    # Key
    key = b'YELLOW SUBMARINE'

    # Decode the Base64-encoded content
    ciphertext = base64.b64decode(encoded_ciphertext)

    # Decrypt the ciphertext
    plaintext = decrypt_aes_ecb(ciphertext, key)

    # Print the decrypted plaintext
    print(plaintext)
    with open("wordsans.txt", "w") as output_file:
        output_file.write(plaintext)
if __name__ == "__main__":
    main()
