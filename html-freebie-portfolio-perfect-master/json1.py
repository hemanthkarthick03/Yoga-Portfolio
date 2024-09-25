import json

def clean_and_sort(json_obj):
    keys_to_remove = []
    
    for key, value in json_obj.items():
        if value is None or value == "":
            keys_to_remove.append(key)
        elif isinstance(value, dict):
            clean_and_sort(value)

    for key in keys_to_remove:
        del json_obj[key]

    # Sort the JSON object by keys
    sorted_json_obj = {key: json_obj[key] for key in sorted(json_obj.keys())}
    return sorted_json_obj

if __name__ == "__main__":
    json_string = input()
    json_obj = json.loads(json_string)
    cleaned_sorted_json = clean_and_sort(json_obj)
    print(json.dumps(cleaned_sorted_json))
