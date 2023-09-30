interface ButtonProps {
    label: string;
}

const Button: React.FC<ButtonProps> = ({
    label
}) => {
    return ( <div className="rounded-full bg-red-500 text-zinc-100 cursor-pointer font-bold text-center p-2">{label}</div> );
}
 
export default Button;
