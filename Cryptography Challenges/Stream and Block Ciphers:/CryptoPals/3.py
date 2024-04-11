def xor_single_byte(text, key):
    bytes_text = bytes.fromhex(text)
    decoded = ''
    for i in bytes_text:
        decoded_byte = i ^ key
        decoded += chr(decoded_byte)
    return decoded



def find_xor_key(text):
    decodedstr = []
    for key in range(48,127): 
        decoded = xor_single_byte(text, key)
        decodedstr.append(decoded)
    return decodedstr
hex_txt = "1b37373331363f78151b7f2b783431333d78397828372d363c78373e783a393b3736"
ans = find_xor_key(hex_txt)
for message in enumerate(ans,start=48):  
    print("Decrypted message:", message)

