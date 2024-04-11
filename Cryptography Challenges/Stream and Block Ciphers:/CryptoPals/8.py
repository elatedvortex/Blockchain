def detect_ecb(ciphertext, block_size=16):
    blocks = [ciphertext[i:i+block_size] for i in range(0, len(ciphertext), block_size)]
    unique_blocks = set(blocks)
    if len(blocks) != len(unique_blocks):
        return True  # Repeated blocks found
    else:
        return False

def main():
    with open("8words.txt", "r") as file:
        ciphertexts = file.readlines()

    for index, ciphertext in enumerate(ciphertexts):
        ciphertext = bytes.fromhex(ciphertext.strip())
        if detect_ecb(ciphertext):
            print(f"ECB mode detected in ciphertext at index {index}")
            print(ciphertext)
            break
    else:
        print("ECB mode not detected in any ciphertexts.")

if __name__ == "__main__":
    main()
