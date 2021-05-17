import sys
from codemaker import codemaker
from key_name_matching import number_to_char

if __name__ == "__main__":

    input_keys = [*sys.argv[1:]]
    keys = []
    for key in input_keys:
        if key != '0':
            keys.append(int(key)-1)
  #  keys = [int(key) for key in keys]
    print(codemaker(keys))