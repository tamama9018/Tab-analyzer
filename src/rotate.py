import itertools
import copy

def rotate(keys):

    rotated_keys = []

    index = list(range(len(keys)))

    for n in range(1, len(index)):
        for v in itertools.combinations(index,n):
                #print(v)
                
                rotated = copy.deepcopy(keys)
                for i in v:
                    rotated[i] += 12
                    
                rotated.sort()
                rotated_keys += [rotated]    
                #print(rotated)
    
    rotated_keys = [keys] + rotated_keys
    #print(rotated_keys)

    return rotated_keys