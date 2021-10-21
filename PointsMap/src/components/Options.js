import React  from "react";
import Select from "react-select";

const Options = ({options, onDropdownChange}) => {
    return <div>
        <h3>Categoría</h3>
        <Select
            value = {options.value}         
            options = {options}
            onChange={onDropdownChange}
            defaultValue = {options.find((option) => {
                return option.value === 'TODOS';
              })}
        />
    </div>;
};

export default Options;