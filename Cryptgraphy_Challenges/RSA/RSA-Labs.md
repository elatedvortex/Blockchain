# RSA-Labs by @[m0h1th](https://github.com/m0h1th)

  Let's start with some simple math.                                                           │
│     Raising a number to a power is called Exponentiation, and it is very important in RSA.       │
│     The act of 'encrypting' or 'decrypting' a message is done by exponentiation.                 │
│     With smaller numbers, you could do it on paper, but in RSA, we deal with very large numbers. │
│     Exponentiation is denoted by the symbol '**' in Python.                                      │

│ Your 1st challenge is to find the result of 162659062480109498207044355723808475760 ** 3

**Command** print(162659062480109498207044355723808475760 ** 3)
 ##Challenge 2:                                                                                                                   │
│     For your second challenge, you will have to learn about Modular Exponentiation.                                            │
│     In layman's terms, it is the same as exponentiation, but with modulo.                                                      │
│     What's modulo? It's an operation, similar to division. But instead of giving you the quotient, it gives you the remainder. │
│     For example, 12 modulo 5 is 2, because 12/5 = 2 with remainder 2.                                                          │
│     Again, this operation is easier to do with small numbers, but RSA likes big numbers :)                                     │
│                                                                                                                                │
│ Your 2nd challenge is to find the result of (a**b) mod c,                                                                      │
│     Don't be intimidated by the large numbers, maybe you could use python to do this.                                          │
│     (The classic way is inefficient, don't bother trying that)                                                                 │
╘════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════╛
a = 11941925303411209348531334932830466291946034301756354041884106452586018537045548254477584581145003791850502963152540973533556912326929995226543087203356441
b = 65537
c = 12081119646819624328715224469366880402640517618777792852697306879262431111815165298398632770390391033245249514188404807170307247662117017771896868993777711
```
a = 11941925303411209348531334932830466291946034301756354041884106452586018537045548254477584581145003791850502963152540973533556912326929995226543087203356441
b = 65537
c = 12081119646819624328715224469366880402640517618777792852697306879262431111815165298398632770390391033245249514188404807170307247662117017771896868993777711
print((a**b)%c)
```
╒══════════════════════════════════════════════════════════════════════════════════════════════════════════════════════╕
│ Challenge 3:                                                                                                         │
│     Now, it's pretty obvious that we deal with integers in RSA. But how do we convert them to ASCII?                 │
│     When integers are converted to bytes, it turns into a string of characters that are readable (most of the time). │
│     There are many ways to do this in Python, try to find one that works for you.                                    │
│     (Challenge 3 and 4 will be a bit of a tangent from RSA, but this is meant to help beginners)                     │
│                                                                                                                      │
│ Your 3rd challenge is to convert the following integer to bytes: 5147386106763423842                                 │
│                                                                                                                      │
│     You'll know when you get it :)                                                                                   │
╘══════════════════════════════════════════════════════════════════════════════════════════════════════════════════════╛
```
a = 5147386106763423842 
l = (a.bit_length() + 7) // 8
c = a.to_bytes(l, byteorder='big')
print(c)
```
╒═════════════════════════════════════════════════════════════════════════════════════════╕
│ Challenge 4:                                                                            │
│     Now that you know how to convert bytes to integers, let's do the opposite.          │
│     Assuming you need to use RSA to encrypt a message,                                  │
│     the first step you'll have to do is convert that message into an integer (base 10). │
│     Similar to the last one, try to do this in Python.                                  │
│                                                                                         │
│ Your 4th challenge is to convert the following bytes to an integer: b'BabyBubbleBlue'   │
╘═════════════════════════════════════════════════════════════════════════════════════════╛
```
b = b'BabyBubbleBlue'
c = int.from_bytes(b, byteorder='big')
print(c)
```
╒══════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════╕
│ Challenge 5:                                                                                                                     │
│     So you're finally here, ready to encrypt your first message with RSA.                                                        │
│     If you've done your reading, you should know that encryption is done like this:                                              │
│     ciphertext = (plaintext ** e) mod n                                                                                          │
│     This is the same process as the second challenge. Your goal is to encrypt the message with the given public key pair (e, n). │
│                                                                                                                                  │
│ Your 5th challenge is to encrypt the following message: 'CottonCandyCyan'                                                        │
╘══════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════╛
e = 65537
n = 135771030095248564217333548708085976706635470201693382977359884405785053233624669209798488114332621251071896223046303890356177927260361922567255278263516431110348035912329968828255580422207058843539543230625164543967182776588191950617363654704483596433974410666274335878626712572583335642425654101905539235137

```
e = 65537
n = 135771030095248564217333548708085976706635470201693382977359884405785053233624669209798488114332621251071896223046303890356177927260361922567255278263516431110348035912329968828255580422207058843539543230625164543967182776588191950617363654704483596433974410666274335878626712572583335642425654101905539235137
txt = 'CottonCandyCyan'
b=int.from_bytes(txt.encode(), 'big')
ans = pow(b, e, n)
print(ans)
```
╒═════════════════════════════════════════════════════════════════╕
│ Challenge 6:                                                    │
│     Now that you've learnt to encrypt using an RSA Public key,  │
│     it's time to learn how to decrypt using an RSA Private key. │
│     The Private key pair consists of two numbers, d and n.      │
│     The decryption process is done like this:                   │
│     plaintext = (ciphertext ** d) mod n                         │
│                                                                 │
│ Your 6th challenge is to decrypt the ciphertext (ct):           │
╘═════════════════════════════════════════════════════════════════╛
ct =  65730873122241583977501942857521551655862419814142537467794605641487141508168112705849405463650251324036527189894154256188004834922930955553552265141530965811260529590272915364722691816042276879149322147841179897567021900202362768433876414051764129620855986733911359793478284982158956094706335405419253842189
    Private key pair:
d = 8925128434164048909691892259170125764645191721432443785323614701213701263931531369772008639859571884469382029921205395235347940060683524698685287611143952365525998671937582532821556277881627223397225198920561405991438268419762030177758609618433197246606436834237687551093357836921900203688931921921080815809
n = 100004469514414305589755093689388362495734643502738599480039961817993219308305825163403681010510644997857734671729532909478372020474784776573386509518129821108046890669622337566827126774027510415874337068146526959087096766707185125814728908178444582703103893060931238382193718440117530400435153460058726227213
e = 65537
```
ct =  65730873122241583977501942857521551655862419814142537467794605641487141508168112705849405463650251324036527189894154256188004834922930955553552265141530965811260529590272915364722691816042276879149322147841179897567021900202362768433876414051764129620855986733911359793478284982158956094706335405419253842189
d = 8925128434164048909691892259170125764645191721432443785323614701213701263931531369772008639859571884469382029921205395235347940060683524698685287611143952365525998671937582532821556277881627223397225198920561405991438268419762030177758609618433197246606436834237687551093357836921900203688931921921080815809
n = 100004469514414305589755093689388362495734643502738599480039961817993219308305825163403681010510644997857734671729532909478372020474784776573386509518129821108046890669622337566827126774027510415874337068146526959087096766707185125814728908178444582703103893060931238382193718440117530400435153460058726227213
e = 65537
a=(pow(ct,d,n)) 
l = (a.bit_length() + 7) // 8
c = a.to_bytes(l, byteorder='big')
print(c)
```
╒═════════════════════════════════════════════════════════════════════════════════════════════╕
│ Challenge 7:                                                                                │
│     Great work so far! You've learnt how to encrypt and decrypt messages using RSA.         │
│     Now, let's try to create your own RSA key pair. The first step is to                    │
│     calculate the Euler's Totient of our modulus N. Don't know what that is?                │
│     Here's the quick explanation: Euler's Totient is the number of integers                 │
│     before N that are relatively prime to N. For example, if N = 10, then                   │
│     the Euler's Totient is 4, because the numbers 1, 3, 7, and 9 are relatively             │
│     prime to 10. That just means those numbers don't share any common factors.              │
│     Too much math? Don't worry. All you have to do for now is calculate using this formula: │
│                                                                                             │
│         phi = (p-1)(q-1)                                                                    │
│                                                                                             │
│ Your 7th challenge is to calculate the Euler's Totient of the modulus N:                    │
│     p = 285880804885505715088365434821249117591                                             │
│     q = 223548505081667812376946559606986057893                                             │
│     N = p*q                                                                                 │
╘═════════════════════════════════════════════════════════════════════════════════════════════╛
```
p = 285880804885505715088365434821249117591                                             
q = 223548505081667812376946559606986057893  
phi = (p-1)*(q-1)
print(phi)
```
╒═════════════════════════════════════════════════════════════════════════════════════════╕
│ Challenge 8:                                                                            │
│     Great work! The next step is to calculate the private key d.                        │
│     This can be done by calculating the modular multiplicative inverse of               │
│     e (The public key exponent) under the modulus phi (Euler's Totient).                │
│     The modular multiplicative inverse of e under phi is the private key d.             │
│                                                                                         │
│     To understand what the modular multiplicative inverse is, let's take a look at      │
│     what multiplicative inverse is first. Say you have the number 5. The multiplicative │
│     inverse of 5 is 1/5, because 5 * 1/5 = 1. We get the identity element 1.            │
│                                                                                         │
│     Modular multiplicative inverse is similar. Take 5 mod 7 this time.                  │
│     5 * x mod 7 = 1. The modular multiplicative inverse of 5 mod 7 is x.                │
│     Our task is to find that x. Here, it would be 3. Since 5 * 3 mod 7 = 1.             │
│                                                                                         │
│     Find a way to calculate the modular multiplicative inverse of e under phi.          │
│     That should give you the private key d.                                             │
│                                                                                         │
│ Your 8th challenge is to calculate the private key d:                                   │
╘═════════════════════════════════════════════════════════════════════════════════════════╛
e = 65537
phi = 6040530736567947369501159510312871912817682485385467038065939221077871371867752621870765479917330035438716285734316075589461070087125307656587738034549424

```
e = 65537
t = 6040530736567947369501159510312871912817682485385467038065939221077871371867752621870765479917330035438716285734316075589461070087125307656587738034549424
d = pow(e, -1, t)
print( d)
```
╒════════════════════════════════════════════════════════════════════════════════════════════════════════════╕
│ Challenge 9:                                                                                               │
│     If you've solved all the previous challenges, you should have a good understanding of RSA.             │
│     There is a lot more to it, but you've learnt the basics. This should be your first real challenge.     │
│     All the best, and happy googling :)                                                                    │
│                                                                                                            │
│ Your 9th challenge is to decrypt the given ciphertext                                                      │
│                                                                                                            │
│ The security of RSA lies in the difficulty of factorization of large numbers. If you manage to factorize N │
│ into the primes p and q, you've successfully broken RSA! Maybe there's a way for you to find the factors.  │
│ Maybe a database of already factorized numbers?                                                            │
╘════════════════════════════════════════════════════════════════════════════════════════════════════════════╛
ct = 5119667904388996554913075691965298077574451428525647832421139040755532148564677239610936209568188199266675953600861923623367821617006732308102397661359638
n = 6910782171213996658397253121710630123795235324197483219005527369298065059694620267925472189305202037262152652525687783466320955431741311010423968405213211
e = 65537

```
p = 88741743249819454803256128724422664779772307593666473114032370133748568669343
n = 6910782171213996658397253121710630123795235324197483219005527369298065059694620267925472189305202037262152652525687783466320955431741311010423968405213211
e = 65537
ct = 5119667904388996554913075691965298077574451428525647832421139040755532148564677239610936209568188199266675953600861923623367821617006732308102397661359638
q=n//p
t=(p-1)*(q-1)
d = pow(e, -1, t)
a=(pow(ct,d,n)) 
l = (a.bit_length() + 7) // 8
c = a.to_bytes(l, byteorder='big')
print(c)
```
╒══════════════════════════════════════════════════════════════════════════════════════════════════════════════╕
│ Challenge 10:                                                                                                │
│     Welcome to the final challenge! You've made it this far, so you should be able to solve this one.        │
│     Alice encrypted and sent a very secret message to Bob using RSA. But she chose her parameters poorly.    │
│     Eve, who happens to be eavesdropping, managed to intercept the message. She has the public key pair too. │
│     Can you help Eve figure out what the message is?                                                         │
│                                                                                                              │
│ Your 10th challenge is to decrypt the given ciphertext                                                       │
│                                                                                                              │
│ This challenge demonstrates what would go wrong if you choose an e that is too small.                        │
│ You might be able to find what is wrong with this with a little googling. Again, we encourage you to :)      │
╘══════════════════════════════════════════════════════════════════════════════════════════════════════════════╛
n = 117074712749243314104120206523208828239739356370813271231812420842659757427553455282559371215875081681811753738135075574497504999188420518925155046235035751639404389071835553732113704031110653016113481332938049250611262071285422427426607831948727746419318269434949378088634570780979492584407323665357971118667
e = 3
ct = 82895006021025315212194766818959778180071540025724099235413209819072766522409462780959875360431145495518560461472745549100306588074106771552399979846135716227942541180509399193416

```
import gmpy2 
n=117074712749243314104120206523208828239739356370813271231812420842659757427553455282559371215875081681811753738135075574497504999188420518925155046235035751639404389071835553732113704031110653016113481332938049250611262071285422427426607831948727746419318269434949378088634570780979492584407323665357971118667
n=hex(n)
e=3
cipher=82895006021025315212194766818959778180071540025724099235413209819072766522409462780959875360431145495518560461472745549100306588074106771552399979846135716227942541180509399193416

with gmpy2.local_context(gmpy2.context(), precision=200):
 root = gmpy2.root(cipher,3)
print(bytes.fromhex(str('%x' % + int(root))).decode('utf-8'))
```
## <span style="color:Green;">Flag-bi0s{M4tH_fr35h3R}</span>
## <span style="color:Green;">bi0s{RSA_b4s1c5_d0wN}</span>
## <span style="color:Green;">bi0s{y0u_H4v3_gR4dU4t3d}</span>
