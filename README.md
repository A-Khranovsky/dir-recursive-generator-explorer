## Vocation
Praction with generators, recursion, directory functions

## Description
Project outputs the tree of current directory with it's subdirectories and files. 
Uses recursive generator as method of class. In it is able to filter the output result.
Filter can pass the files which correspond given condition by file extension and/or 
larger or smaller size, according to the specified (in Bytes) 

## How to run
* Clone the project.
* Run:
```angular2html
docker-compose up -d
```
* visit: http://localhost

### Some output example:
```angular2html
dir .docker
        dir php-apache
    dir .git
    file COMMIT_EDITMSG
    file description
    file HEAD
        dir hooks
        dir info
        dir logs
            dir refs
                dir heads
                dir remotes
                    dir origin
        dir objects
            dir 04
            file 9db4ae332a1a06f82faf91eb6202af9283ceeb
            dir 06
            dir 1e
            dir 20
            file 98711a5a5a6ae667afce633e67edeee6b4a078
            dir 3c
            file 2510e197fedf78d580a7275589dc23b22e51f0
            dir 4a
            dir 4b
            dir 52
            file ba7b8b9eb62319f23069a9dbcedee2b506657c
            dir 61
            dir 64
            dir 6a
            dir 73
            dir 7b
            dir 88
            dir 8a
            dir 94
            dir b0
            dir be
            file ed05375417611bfd4320b21e5108e2daf3d6c9
            dir c9
            dir d4
            file eb3c4fc3036362a86f849c241ea2c399f8ad24
            dir d7
            dir d8
            dir db
            dir e3
            file f3907ca867da4970d1f057d9a1d708e507271e
            dir e4
            dir e6
            file 9de29bb2d1d6434b8b29ae775ad8c2e48c5391
            dir f3
            file 8e74e1856c0f70a6591ea56af0cb40eb7779e4
            dir ff
            dir info
            dir pack
        dir refs
            dir heads
            file master
            dir remotes
                dir origin
                file master
            dir tags
    dir .idea
        dir sonarlint
            dir issuestore
                dir 3
                    dir 9
                    file 39fa5ab4caae8c73bb5e30fbeaf7c1d2fe616b66
                dir 8
                    dir e
                dir 9
                    dir 9
                dir a
                    dir 7
                dir b
                    dir b
                dir e
                    dir f
                    file ef8def03dc8f162799089e9b5f4321201c8810d5
    dir App
```
    