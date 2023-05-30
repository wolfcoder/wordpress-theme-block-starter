
export default function save({ attributes}) {
    const { content } = attributes;
    console.log(content);

    return (
        <h1>{content}</h1>
    )
}