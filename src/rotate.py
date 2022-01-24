import itertools
import copy
import sys
sys.setrecursionlimit(200000)

def rotate(keys):
    """
    keysの転換系の候補を出力
    """

    rotated_keys = [] 
    index = list(range(len(keys)))
    for n in index:
        # indexからn個選択、12を足す
        for chosen_indexes in itertools.combinations(index, n):
                # print(chosen_indexes)
                rotated_key = copy.deepcopy(keys)
                for i in chosen_indexes:
                    rotated_key[i] += 12
                rotated_key.sort()
                # print(rotated_key)
                rotated_keys.append(rotated_key)    

    return rotated_keys