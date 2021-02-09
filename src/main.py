import sys
from codemaker import codemaker
from key_name_matching import number_to_char

if __name__ == "__main__":

    keys = [*sys.argv[1:]]
    keys = [int(key) for key in keys]
    
    print(codemaker(keys))